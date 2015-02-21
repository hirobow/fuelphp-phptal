<?php
namespace View_Phptal;


/**
 * View class
 *
 * Acts as an object wrapper for HTML pages with embedded PHP, called "views".
 * Variables can be assigned with the view object and referenced locally within
 * the view.
 *
 * @package   My
 * @category  View
 */
class View_Phptal extends \Parser\View_Phptal
{
    /**
     * @var  string  The view file extension
     */
    public $extension = 'html';
}
