<?php

namespace App\Models\Repository;

use App\Models\Ticket;

class TicketRepository
{

    public function Insert(array $data)
    {
        Ticket::create([$data]);
    }

    public function Update(int $id, array $content)
    {
        Ticket::where('id', $id)->update($content);
    }

}
