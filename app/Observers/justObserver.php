<?php

namespace App\Observers;

use App\Models\data;

class justObserver
{
    /**
     * Handle the data "created" event.
     *
     * @param  \App\Models\data  $data
     * @return void
     */
    public function created(data $data)
    {
        //
    }

    /**
     * Handle the data "updated" event.
     *
     * @param  \App\Models\data  $data
     * @return void
     */
    public function updated(data $data)
    {
        //
    }

    /**
     * Handle the data "deleted" event.
     *
     * @param  \App\Models\data  $data
     * @return void
     */
    public function deleted(data $data)
    {
        //
    }

    /**
     * Handle the data "restored" event.
     *
     * @param  \App\Models\data  $data
     * @return void
     */
    public function restored(data $data)
    {
        //
    }

    /**
     * Handle the data "force deleted" event.
     *
     * @param  \App\Models\data  $data
     * @return void
     */
    public function forceDeleted(data $data)
    {
        //
    }
}
