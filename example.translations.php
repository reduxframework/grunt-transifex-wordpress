<?php

    /*

        WordPress translation functions

        __()  - Return string translation.
        _e()  - Same as __() but echo's immedately.
        _x()  - Differentiate identical strings in different contexts.
        _ex() - Same as _x() with instant echo.
        _n()  - Retrieving the plural or single form based on an amount.

     */


    /*
        $var =  __(string $text, [string $domain = 'default']);
            Return any translated string
     */

    $var = __( 'Here I am', 'textdomain' );

    /*
        _e(string $text, [string $domain = 'default']);
            Echo any translated string
     */

    _e( 'Here I am 2', 'textdomain' );

    /*
        $var = _x (string $text, string $context, [string $domain = 'default']);
        By using the parameter $context you can differentiate identical strings in different contexts.

        The following should create the output:
            Context: test1 -> context1
            Context: test2 -> context2

        This will need to have contexts manually added to the pot file:
            msgctxt "test1"
            msgid "testing"
            msgstr "context1"

            msgctxt "test2"
            msgid "testing"
            msgstr "context2"
    */

    echo 'Context: test1 -> ' . _x( 'testing', 'test1', 'textdomain' );
    echo '<br>Context: test2 -> ' . _x( 'testing', 'test2', 'textdomain' );

    /*

     */

    /*
        _ex (string $text, string $context, [string $domain = 'default']);
        Same as _x(), but outputs immediately.
    */

    echo 'Context: test1 -> ';
    _ex( 'testing', 'test1', 'textdomain' );
    echo '<br>Context: test2 -> ';
    _ex( 'testing', 'test2', 'textdomain' );

    /*
        _n( $single, $plural, $number, $domain = 'default' )
        Used for retrieving the plural or single form based on the amount.

        The following example should out:
            comment<br />comments
    */

    $comment_count = 1;
    echo _n( 'comment', 'comments', $comment_count, 'textdomain' ) . '<br/>';
    $comment_count = 2;
    echo _n( 'comment', 'comments', $comment_count, 'textdomain' );

    /*
        _nx($single, $plural, $number, $context, $domain = 'default')
        Same as _n(), but outputs immediately.
    */

    /*
        If you're planning to output the value of the numbers, or HTML, you should use sprintf().
    */

    $approved = 1;
    echo sprintf( _n( '%s comment approved', '%s comments approved', $approved, 'textdomain' ), $approved );
    echo '<br/>';
    $approved = 2;
    echo sprintf( _n( '%s comment approved', '%s comments approved', $approved, 'textdomain' ), $approved );

    /*
        If the above looks messy, it can be rewritten this way
    */

    $approved = 1;
    $text     = _n( '%s comment approved', '%s comments approved', $approved, 'textdomain' );
    echo sprintf( $text, $approved );
    echo '<br/>';

    $approved = 2;
    $text     = _n( '%s comment approved', '%s comments approved', $approved, 'textdomain' );
    echo sprintf( $text, $approved );


    /*
        Extra translation functions, that can work for you as well.

            esc_attr__() - return translated string escaped to be an attribute
                $translated_text = esc_attr__( $text, $domain );

            esc_attr_e() - echo translated string escaped to be an attribute
                esc_attr_e( $text, $domain );

            esc_attr_x() - return translated string with context escaped to be an attribute

    */

    $translated_text = esc_attr__( 'class-name', 'textdomain' );
    echo "<a href='' class='$translated_text'></a>";

?><a href="" class="<?php esc_attr_e( 'class-name', 'textdomain' ); ?>"></a><?php

    $transpated_text_context = esc_attr_x( 'testing', 'test1', 'textdomain' );
    echo "<a href='' class='$transpated_text_context'></a>";


    /*
        esc_html__() - return translated string escaped to be HTML
            $translated_text = esc_html__( $text, $domain );

        esc_html_e() - echo translated string escaped to be HTML
            esc_html_e( $text, $domain );

        esc_html_x() - return translated string with context escaped to be HTML
    */

    $translated_html = esc_html__( "Test here", 'textdomain' );
    echo $translated_html;

    esc_html_e( "Test here two", 'textdomain' );

    $translated_html_context = esc_html_x( 'testing', 'test1', 'textdomain' );
    echo $translated_html_context;


/*
    The functions _n_noop(), _nx_noop(), and translate_nooped_plural() can also be used for dealing with translations.
 */