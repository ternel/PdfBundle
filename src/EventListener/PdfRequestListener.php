<?php

/*
 * Copyright 2011 Piotr Śliwa <peter.pl7@gmail.com>
 *
 * License information is in LICENSE file
 */

namespace Ps\PdfBundle\EventListener;

use Symfony\Component\HttpKernel\Event\ResponseEvent;

/**
 * Register a new 'pdf' format associated to mime type pdf.
 */
class PdfRequestListener
{
    public function onKernelRequest(ResponseEvent $event)
    {
        $request = $event->getRequest();
        $request->setFormat('pdf', 'application/pdf');
    }
}
