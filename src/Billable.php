<?php

namespace veekthoven\Cashier;

use veekthoven\Cashier\Concerns\ManagesCards;
use veekthoven\Cashier\Concerns\ManagesCustomer;
use veekthoven\Cashier\Concerns\ManagesInvoices;
use veekthoven\Cashier\Concerns\ManagesPayments;
use veekthoven\Cashier\Concerns\ManagesSubscriptions;

trait Billable
{
    use ManagesCards;
    use ManagesCustomer;
    use ManagesInvoices;
    use ManagesPayments;
    use ManagesSubscriptions;
}
