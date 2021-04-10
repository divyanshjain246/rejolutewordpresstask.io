<?php
/**
 * Team Widget
 *
 * @package corporate_blue
 */

if ( ! class_exists( 'Corporate_Blue_Team_Widget' ) ) :

     
    class Corporate_Blue_Team_Widget extends WP_Widget {
        /**
         * Sets up the widgets name etc
         */
        public function __construct() {
            $st_widget_team = array(
                'classname'   => 'team_widget',
                'description' => esc_html__( 'Compatible Area: Homepage, About Page, Service Page, Sidebar', 'corporate-blue' ),
            );
            parent::__construct( 'corporate_blue_team_widget', esc_html__( 'ST: Team Widget', 'corporate-blue' ), $st_widget_team );
        }

        /**
         * Outputs the content of the widget
         *
         * @param array $args
         * @param array $instance
         */
        public function widget( $args, $instance ) {
            // outputs the content of the widget
            if ( ! isset( $args['widget_id'] ) ) {
                $args['widget_id'] = $this->id;
            }

            $title   = ( ! empty( $instance['title'] ) ) ? ( $instance['title'] ) : '';
            $title   = apply_filters( 'widget_title', $title, $instance, $this->id_base );
            $content_details = array();
            $position = array();

            $page_ids = array();
            for ( $i = 1; $i <= 4; $i++ ) :
                if ( ! empty( $instance['page_id_' . $i] ) ) :
                    $page_ids[] = $instance['page_id_' . $i];
                    $position[] = ! empty( $instance['team_page_position_' . $i] ) ? $instance['team_page_position_' . $i] : '';
                endif;
            endfor;
            $query_args = array(
            'post_type'         => 'page',
            'post__in'          => ( array ) $page_ids,
            'posts_per_page'    => 4,
            'orderby'           => 'post__in',
            ); 

            $i = 0;
            $query = new WP_Query( $query_args );
            if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post();
                $details['title']  = get_the_title();
                $details['position']  = ! empty( $position[$i] ) ? $position[$i] : ''; 
                $details['url']    = get_the_permalink();
                $details['image']  = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'large' ) : '';
                array_push( $content_details , $details );
                $i++;
            endwhile; endif;
            wp_reset_postdata();

            if ( empty( $content_details ) )
                return;

            echo $args['before_widget'];
            ?>

                <div class="page-section team-section relative">
                    <div class="wrapper">
                        <?php if ( ! empty( $title ) ) : ?>
                            <div class="section-header align-center">
                                <?php echo $args['before_title'] . esc_html( $title ) . $args['after_title']; ?>
                                    <div class="separator"></div>
                            </div><!-- .section-header -->
                        <?php endif; ?>

                        <div class="section-content column-4">
                            <?php foreach ( $content_details as $content ) : ?>
                                <article class="hentry <?php echo ! empty( $content['image'] ) ? '' : 'no-featured-image'; ?>">
                                    <div class="post-wrapper">
                                        <?php if ( ! empty( $content['image'] ) ) : ?>
                                            <div class="team-image">
                                                <a href="<?php echo esc_url( $content['url'] ); ?>">
                                                    <img src="<?php echo esc_url( $content['image'] ); ?>" alt="<?php echo esc_attr( $content['title'] ) ?>">
                                                </a>
                                            </div><!-- .team-image -->
                                        <?php endif; ?>

                                        <div class="entry-container">
                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                            </header>
                                            <?php if ( ! empty( $content['position'] ) ) : ?>
                                                <h6 class="position"><?php echo esc_html( $content['position'] ); ?></h6>
                                            <?php endif; ?>
                                        </div><!-- .entry-container -->

                                    </div><!-- .post-wrapper -->
                                </article>
                            <?php endforeach; ?>
                        </div><!-- .section-content -->
                    </div><!-- .wrapper -->
                </div><!-- #team-posts -->

            <?php
            echo $args['after_widget'];
        }

        /**
         * Outputs the options form on admin
         *
         * @param array $instance The widget options
         */
        public function form( $instance ) {
            $title      = isset( $instance['title'] ) ? ( $instance['title'] ) : esc_html__( 'Team', 'corporate-blue' );

            $page_options = corporate_blue_page_choices();
            ?>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'corporate-blue' ); ?></label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>

            <?php for ( $i = 1; $i <= 4; $i++ ) : 
                $page_id = isset( $instance['page_id_' . $i] ) ? $instance['page_id_' . $i] : '';
                $team_page_position = isset( $instance['team_page_position_' . $i] ) ? $instance['team_page_position_' . $i] : '';
                ?>
                <p>
                    <label for="<?php echo esc_attr( $this->get_field_id( 'page_id_' . $i ) ); ?>"><?php printf( esc_html__( 'Select Page %d', 'corporate-blue' ), $i ); ?></label>
                    <select class="corporate-blue-widget-chosen-select widfat" id="<?php echo esc_attr( $this->get_field_id( 'page_id_' . $i ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'page_id_' . $i ) ); ?>">
                        <?php foreach ( $page_options as $page_option => $value ) : ?>
                            <option value="<?php echo absint( $page_option ); ?>" <?php selected( $page_id, $page_option, $echo = true ) ?> ><?php echo esc_html( $value ); ?></option>
                        <?php endforeach; ?>
                    </select>
                </p>

                <p>
                    <label for="<?php echo esc_attr( $this->get_field_id( 'team_page_position_' . $i ) ); ?>"><?php printf( esc_html__( 'Team Postion %d', 'corporate-blue' ), $i ); ?></label>
                    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('team_page_position_' . $i) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'team_page_position_' . $i ) ); ?>" type="text" value="<?php echo esc_attr( $team_page_position ); ?>" />
                </p>

                <hr>
            <?php endfor; ?>
            
        <?php }

        /**
        * Processing widget options on save
        *
        * @param array $new_instance The new options
        * @param array $old_instance The previous options
        */
        public function update( $new_instance, $old_instance ) {
            // processes widget options to be saved
            $instance                   = $old_instance;
            $instance['title']          = sanitize_text_field( $new_instance['title'] );
            for ( $i = 1; $i <= 4; $i++ ) :
                // page
                $instance['page_id_' . $i]   = corporate_blue_sanitize_page_post( $new_instance['page_id_' . $i] );
                $instance['team_page_position_' . $i]   = sanitize_text_field( $new_instance['team_page_position_' . $i] );
            endfor;
           
            return $instance;
        }
    }
endif;
