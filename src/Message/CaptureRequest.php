<?php

namespace Omnipay\CobreFacil\Message;

/**
 * Capture invoice pre authorized.
 *
 * @link https://developers.cobrefacil.com.br/#capturar-cobranca-via-cartao
 */
class CaptureRequest extends AbstractRequest
{
    public function getHttpMethod(): string
    {
        return 'POST';
    }

    public function getEndpoint(): string
    {
        return $this->endpoint . '/invoices/' . $this->getReference();
    }

    public function getData()
    {
        $data = [
            'amount' => $this->getAmount(),
        ];
        return $data;
    }

    public function setAmount($value): CaptureRequest
    {
        return $this->setAmountInteger($value);
    }

    public function getAmount()
    {
        return $this->getAmountInteger();
    }
}
