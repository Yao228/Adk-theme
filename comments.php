<?php
  if ( is_singular() ) wp_enqueue_script( "comment-reply" );
      $aria_req = ( $req ? " aria-required='true'" : '' );
      $comment_args = array(
              'id_form' => 'contact-on__forme',        
              'class_form' => 'contact-one__form',
              'title_reply'=> esc_html__( 'Laisser un commentaire'),
              'fields' => apply_filters( 'comment_form_default_fields', array(
                  'author' =>   ' <div class ="row"> <div class="col-lg-6">
                                      <div class="input-box">
                                          <input type="text" name="author" placeholder="'.esc_attr__('Votre nom....').' " required="required" data-error="Nom est requis.">
                                      </div>
                                  </div>',
                  'email' =>    ' <div class="col-lg-6">
                                      <div class="input-box">
                                          <input type="email" placeholder="'.esc_attr__('Votre e-mail....').'" required="required" data-error="E-mail est requis.">
                                      </div>
                                  </div></div>',
                    

              ) ),   
              'comment_field' => '<div class ="row">
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="'.esc_attr__('Votre commentaire...').'" required="required" data-error="Vous devez laisser un commenatire."></textarea>
                                        </div>
                                    </div>
                                  </div>',
            'submit_button' => '<div class="input-box">
                                    <button type="submit" class="main-btn main-btn-2">Laisser un commentaire</button>
                              </div>',               
               'comment_notes_before' => '',
               'comment_notes_after' => '',               
      )
?>

<?php if ( comments_open() ) : ?>
<?php comment_form($comment_args); ?>
<?php endif; ?> 