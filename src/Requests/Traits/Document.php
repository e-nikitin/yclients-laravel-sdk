<?php

namespace nikitin\YClientsSDK\Requests\Traits;


trait Document
{
    /**
     * @param int|string $documentId
     * @return $this
     */
    public function setDocumentId($documentId){
        $this->params['document_id'] = $documentId;
        return $this;
    }

}