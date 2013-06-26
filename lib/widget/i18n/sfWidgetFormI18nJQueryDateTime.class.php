<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfWidgetFormDateTime represents a datetime widget.
 *
 * @package    symfony
 * @subpackage widget
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfWidgetFormDateTime.class.php 20301 2009-07-19 10:57:32Z fabien $
 */
class sfWidgetFormI18nJQueryDateTime extends sfWidgetFormI18nDateTime
{
  /**
   * Returns the date widget.
   *
   * @param  array $attributes  An array of attributes
   *
   * @return sfWidgetForm A Widget representing the date
   */
  protected function getDateWidget($attributes = array())
  {
    return new sfWidgetFormI18nJQueryDate(array_merge(array('culture' => $this->getOption('culture')), $this->getOptionsFor('date')), $this->getAttributesFor('date', $attributes));
  }

}
