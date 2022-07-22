<?php

namespace Drupal\calendar_systems\Plugin\views\argument;

use Drupal\datetime\Plugin\views\argument\FullDate;
use Drupal\views\Annotation\ViewsArgument;

/**
 * Argument handler for a full date (CCYYMMDD).
 *
 * @ViewsArgument("datetime_full_date")
 */
class CalendarSystemsDateFullDate extends FullDate {

  use CalendarSystemsArgHandlerTrait;

}
