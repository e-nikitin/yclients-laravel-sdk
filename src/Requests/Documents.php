<?php

namespace nikitin\YClientsSDK\Requests;

use nikitin\YClientsSDK\Requests\Traits\Company;

class Documents extends Request
{
    use Company;

    protected $documentId;

    /**
     * @param $documentId
     *
     * @return $this
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Illuminate\Support\Collection
     */
    protected function request()
    {
        return $this->requestApi("storage_operations/documents/{$this->company_id}/{$this->documentId}");
    }
}
