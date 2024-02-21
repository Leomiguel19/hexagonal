<?php

interface response
{
    public function JsonResponse(): string;

    public function HtmlResponse(): string;
}

interface BinaryResponse
{
    public function BinaryResponse();
}

final class apiResponse implements Response
{
    public function JsonResponse(): string
    {
        return json_encode("hello world", true);
    }

    public function HtmlResponse(): string
    {
        return "<br>Hello world</br>";
    }
}

final class fileResponse implements BinaryResponse
{
    public function BinaryResponse(): string
    {
        return true;
    }
}
