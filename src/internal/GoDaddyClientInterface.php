<?php 
# Code generated by sdkgen
# Generated on 2020-07-21 16:24:42.041919895 +0000 UTC using container gcr.io/repcore-prod/sdkgen:latest
# DO NOT EDIT!

namespace Vendasta\Godaddy\V1\internal;

interface GoDaddyClientInterface
{
    /**
     * Auth wrapper for \Godaddy\V1\GoDaddyClient::GetDomainAvailable
     * @param \Godaddy\V1\GetDomainAvailableRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Godaddy\V1\GetDomainAvailableResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetDomainAvailable(\Godaddy\V1\GetDomainAvailableRequest $req, array $options = []): \Godaddy\V1\GetDomainAvailableResponse;
}
