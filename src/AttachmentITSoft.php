<?php


namespace PolyWeb\AttachmentItSoft;


use PolyWeb\Attachment\Sdk\APackage;

class AttachmentITSoft extends APackage
{
    public const ATTACHMENT_PREFIX = 'polyweb-cz';
    public const ATTACHMENT_MODULE = 'attachment-itsoft';

    public function getWorkDirectory(): string
    {
        return __DIR__;
    }

    public function getAttachmentPrefix(): string
    {
        return self::ATTACHMENT_PREFIX;
    }

    public function getAttachmentModule(): string
    {
        return self::ATTACHMENT_MODULE;
    }
}