<?php

/*
 * This file is part of the Eventum (Issue Tracking System) package.
 *
 * @copyright (c) Eventum Team
 * @license GNU General Public License, version 2 or later (GPL-2+)
 *
 * For the full copyright and license information,
 * please see the COPYING and AUTHORS files
 * that were distributed with this source code.
 */

use Eventum\Mail\MailTransport;
use Eventum\Monolog\Logger;

class MailTransportTest extends TestCase
{
    public static function setUpBeforeClass()
    {
        Logger::initialize();
    }

    public function testSimpleMail()
    {
        $transport = new MailTransport();
        $recipient = 'root@localhost';
        $headers = ['Subject: lol'];
        $body = 'nothing';
        $transport->send($recipient, $headers, $body);
    }
}
