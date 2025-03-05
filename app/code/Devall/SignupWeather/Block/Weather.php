<?php
// if it's empty than why we need it? it extends Magento\Framework\View\Element\Template, so since it's empty using this class would be same as using default template class. Which is used by default when u declare block element in xml file.
declare(strict_types=1);

namespace Devall\SignupWeather\Block;

use Magento\Framework\View\Element\Template;

class Weather extends Template
{
}
