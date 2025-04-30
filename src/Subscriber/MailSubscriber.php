<?php

namespace Netzkollektiv\BccMailer\Subscriber;

use Shopware\Core\System\SystemConfig\SystemConfigService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Shopware\Core\Content\MailTemplate\Service\Event\MailBeforeSentEvent;

class MailSubscriber implements EventSubscriberInterface
{
    private SystemConfigService $systemConfigService;

    public function __construct(SystemConfigService $systemConfigService)
    {
        $this->systemConfigService = $systemConfigService;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            MailBeforeSentEvent::class => 'beforeMailSend',
        ];
    }

    public function beforeMailSend(MailBeforeSentEvent $event): void
    {
        $bccEmail = $this->systemConfigService->get('NetzkollektivBccMailer.config.bccEmail');

	if (!empty($bccEmail)) {
            $message = $event->getMessage();
            $message->addBcc($bccEmail);
        }
    }
}
