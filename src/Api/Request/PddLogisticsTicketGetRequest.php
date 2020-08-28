<?php
namespace Com\Pdd\Pop\Sdk\Api\Request;

use Com\Pdd\Pop\Sdk\PopBaseHttpRequest;
use Com\Pdd\Pop\Sdk\PopBaseJsonEntity;

class PddLogisticsTicketGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "start_updated_at")
	*/
	private $startUpdatedAt;

	/**
	* @JsonProperty(Long, "end_updated_at")
	*/
	private $endUpdatedAt;

	/**
	* @JsonProperty(Integer, "page")
	*/
	private $page;

	/**
	* @JsonProperty(Integer, "page_size")
	*/
	private $pageSize;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "start_updated_at", $this->startUpdatedAt);
		$this->setUserParam($params, "end_updated_at", $this->endUpdatedAt);
		$this->setUserParam($params, "page", $this->page);
		$this->setUserParam($params, "page_size", $this->pageSize);

	}

	public function getVersion()
	{
		return "V1";
	}

	public function getDataType()
	{
		return "JSON";
	}

	public function getType()
	{
		return "pdd.logistics.ticket.get";
	}

	public function setStartUpdatedAt($startUpdatedAt)
	{
		$this->startUpdatedAt = $startUpdatedAt;
	}

	public function setEndUpdatedAt($endUpdatedAt)
	{
		$this->endUpdatedAt = $endUpdatedAt;
	}

	public function setPage($page)
	{
		$this->page = $page;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}

}
