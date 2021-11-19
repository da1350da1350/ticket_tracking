<?php

namespace App\Models\Repository;

use App\Models\Ticket;

class TicketRepository
{

    public function Insert(array $data)
    {
        Ticket::create([$data]);
    }

    public function UpdateStatus(int $id, string $status)
    {
        Ticket::where('id', $id)->update(['status' => $status]);
    }

}
