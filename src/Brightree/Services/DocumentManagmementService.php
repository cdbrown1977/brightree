<?php

namespace Brightree\Services;

use Brightree\DocumentManagement\DocumentManagement;

class DocumentManagementService{

  use \Brightree\Traits\ApiTrait;

  public function __construct($params) {
    $this->params = $params;
    $this->wsdl_path = "https://webservices.brightree.net/v0100-1610/DocumentationService/DocumentManagementService.svc?singleWsdl";
  }

  public function DocumentBatchCreate($Batch) {
    return $this->ApiCall('DocumentBatchCreate', ['batch' => $Batch]);
  }

  public function DocumentBatchSearch($searchRequest, $sortRequest, $pageSize, $page) {
    return $this->ApiCall('DocumentBatchSearch', [
      'searchRequest' => $searchRequest,
      'sortRequest' => $sortRequest,
      'pageSize' => $pageSize,
      'page' => $page
      ]);
  }

  public function DocumentTypesFetchAll() {
    return $this->ApiCall('DocumentTypesFetchAll',[]);
  }

  public function GenerateDocumentID($DocumentTypeBrightreeID, $EntityType, $EntityBrightreeID) {
    return $this->ApiCall('GenerateDocumentID', [
      'DocumentTypeBrightreeID' => $DocumentTypeBrightreeID,
      'EntityType' => $EntityType,
      'EntityBrightreeID' => $EntityBrightreeID
      ]);
  }

  public function StoreDocument($BatchBrightreeID, $DocumentTypeBrightreeID, $PropertyBag, $SearchforBarCode, $FileContents) {
    return $this->ApiCall('StoreDocument', [
      'BatchBrightreeID' => $BatchBrightreeID,
      'DocumentTypeBrightreeID' => $DocumentTypeBrightreeID,
      'PropertyBag' => $PropertyBag,
      'SearchforBarCode' => $SearchforBarCode,
      'FileContents' => $FileContents
      ]);
  }
}
