<?php
/**
 * Invoice Ninja (https://invoiceninja.com).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2021. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Events\RecurringInvoice;

use App\Models\Company;
use App\Models\RecurringInvoice;
use Illuminate\Queue\SerializesModels;

/**
 * Class RecurringInvoiceWasDeleted.
 */
class RecurringInvoiceWasDeleted
{
    use SerializesModels;

    /**
     * @var RecurringInvoice
     */
    public $recurring_invoice;

    public $company;

    public $event_vars;

    /**
     * Create a new event instance.
     *
     * @param Invoice $invoice
     * @param Company $company
     * @param array $event_vars
     */
    public function __construct(RecurringInvoice $recurring_invoice, Company $company, array $event_vars)
    {
        $this->recurring_invoice = $recurring_invoice;
        $this->company = $company;
        $this->event_vars = $event_vars;
    }
}
