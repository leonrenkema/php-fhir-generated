<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A formal agreement between parties regarding the conduct of business, exchange of information or other matters.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRContract extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Unique identifier for this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The status of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContractResourceStatusCodes
     */
    public $status = null;

    /**
     * When this  Contract was issued.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $issued = null;

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $applies = null;

    /**
     * The target entity impacted by or of interest to parties to the agreement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $subject = [];

    /**
     * The matter of concern in the context of this agreement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $topic = [];

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $authority = [];

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $domain = [];

    /**
     * Type of Contract such as an insurance policy, real estate contract, a will, power of attorny, Privacy or Security policy , trust framework agreement, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * More specific type or specialization of an overarching or more general contract such as auto insurance, home owner  insurance, prenupial agreement, Advanced-Directive, or privacy consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $subType = [];

    /**
     * Action stipulated by this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $action = [];

    /**
     * Reason for action stipulated by this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $actionReason = [];

    /**
     * The type of decision made by a grantor with respect to an offer made by a grantee.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $decisionType = null;

    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $contentDerivative = null;

    /**
     * A set of security labels that define which resources are controlled by this consent. If more than one label is specified, all resources must have all the specified labels.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $securityLabel = [];

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractAgent[]
     */
    public $agent = [];

    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractSigner[]
     */
    public $signer = [];

    /**
     * Contract Valued Item List.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractValuedItem[]
     */
    public $valuedItem = [];

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public $term = [];

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $bindingAttachment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $bindingReference = null;

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractFriendly[]
     */
    public $friendly = [];

    /**
     * List of Legal expressions or representations of this Contract.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractLegal[]
     */
    public $legal = [];

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractRule[]
     */
    public $rule = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Contract';

    /**
     * Unique identifier for this Contract.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Unique identifier for this Contract.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContractResourceStatusCodes
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the resource instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContractResourceStatusCodes $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * When this  Contract was issued.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getIssued() {
        return $this->issued;
    }

    /**
     * When this  Contract was issued.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $issued
     * @return $this
     */
    public function setIssued($issued) {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getApplies() {
        return $this->applies;
    }

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $applies
     * @return $this
     */
    public function setApplies($applies) {
        $this->applies = $applies;
        return $this;
    }

    /**
     * The target entity impacted by or of interest to parties to the agreement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The target entity impacted by or of interest to parties to the agreement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function addSubject($subject) {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * The matter of concern in the context of this agreement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getTopic() {
        return $this->topic;
    }

    /**
     * The matter of concern in the context of this agreement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $topic
     * @return $this
     */
    public function addTopic($topic) {
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAuthority() {
        return $this->authority;
    }

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $authority
     * @return $this
     */
    public function addAuthority($authority) {
        $this->authority[] = $authority;
        return $this;
    }

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getDomain() {
        return $this->domain;
    }

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $domain
     * @return $this
     */
    public function addDomain($domain) {
        $this->domain[] = $domain;
        return $this;
    }

    /**
     * Type of Contract such as an insurance policy, real estate contract, a will, power of attorny, Privacy or Security policy , trust framework agreement, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Type of Contract such as an insurance policy, real estate contract, a will, power of attorny, Privacy or Security policy , trust framework agreement, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * More specific type or specialization of an overarching or more general contract such as auto insurance, home owner  insurance, prenupial agreement, Advanced-Directive, or privacy consent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubType() {
        return $this->subType;
    }

    /**
     * More specific type or specialization of an overarching or more general contract such as auto insurance, home owner  insurance, prenupial agreement, Advanced-Directive, or privacy consent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $subType
     * @return $this
     */
    public function addSubType($subType) {
        $this->subType[] = $subType;
        return $this;
    }

    /**
     * Action stipulated by this Contract.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * Action stipulated by this Contract.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $action
     * @return $this
     */
    public function addAction($action) {
        $this->action[] = $action;
        return $this;
    }

    /**
     * Reason for action stipulated by this Contract.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getActionReason() {
        return $this->actionReason;
    }

    /**
     * Reason for action stipulated by this Contract.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $actionReason
     * @return $this
     */
    public function addActionReason($actionReason) {
        $this->actionReason[] = $actionReason;
        return $this;
    }

    /**
     * The type of decision made by a grantor with respect to an offer made by a grantee.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDecisionType() {
        return $this->decisionType;
    }

    /**
     * The type of decision made by a grantor with respect to an offer made by a grantee.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $decisionType
     * @return $this
     */
    public function setDecisionType($decisionType) {
        $this->decisionType = $decisionType;
        return $this;
    }

    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getContentDerivative() {
        return $this->contentDerivative;
    }

    /**
     * The minimal content derived from the basal information source at a specific stage in its lifecycle.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $contentDerivative
     * @return $this
     */
    public function setContentDerivative($contentDerivative) {
        $this->contentDerivative = $contentDerivative;
        return $this;
    }

    /**
     * A set of security labels that define which resources are controlled by this consent. If more than one label is specified, all resources must have all the specified labels.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel() {
        return $this->securityLabel;
    }

    /**
     * A set of security labels that define which resources are controlled by this consent. If more than one label is specified, all resources must have all the specified labels.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $securityLabel
     * @return $this
     */
    public function addSecurityLabel($securityLabel) {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractAgent[]
     */
    public function getAgent() {
        return $this->agent;
    }

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractAgent $agent
     * @return $this
     */
    public function addAgent($agent) {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractSigner[]
     */
    public function getSigner() {
        return $this->signer;
    }

    /**
     * Parties with legal standing in the Contract, including the principal parties, the grantor(s) and grantee(s), which are any person or organization bound by the contract, and any ancillary parties, which facilitate the execution of the contract such as a notary or witness.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractSigner $signer
     * @return $this
     */
    public function addSigner($signer) {
        $this->signer[] = $signer;
        return $this;
    }

    /**
     * Contract Valued Item List.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractValuedItem[]
     */
    public function getValuedItem() {
        return $this->valuedItem;
    }

    /**
     * Contract Valued Item List.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractValuedItem $valuedItem
     * @return $this
     */
    public function addValuedItem($valuedItem) {
        $this->valuedItem[] = $valuedItem;
        return $this;
    }

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public function getTerm() {
        return $this->term;
    }

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractTerm $term
     * @return $this
     */
    public function addTerm($term) {
        $this->term[] = $term;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getBindingAttachment() {
        return $this->bindingAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $bindingAttachment
     * @return $this
     */
    public function setBindingAttachment($bindingAttachment) {
        $this->bindingAttachment = $bindingAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBindingReference() {
        return $this->bindingReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $bindingReference
     * @return $this
     */
    public function setBindingReference($bindingReference) {
        $this->bindingReference = $bindingReference;
        return $this;
    }

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractFriendly[]
     */
    public function getFriendly() {
        return $this->friendly;
    }

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractFriendly $friendly
     * @return $this
     */
    public function addFriendly($friendly) {
        $this->friendly[] = $friendly;
        return $this;
    }

    /**
     * List of Legal expressions or representations of this Contract.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractLegal[]
     */
    public function getLegal() {
        return $this->legal;
    }

    /**
     * List of Legal expressions or representations of this Contract.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractLegal $legal
     * @return $this
     */
    public function addLegal($legal) {
        $this->legal[] = $legal;
        return $this;
    }

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractRule[]
     */
    public function getRule() {
        return $this->rule;
    }

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractRule $rule
     * @return $this
     */
    public function addRule($rule) {
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['issued'])) {
                $this->setIssued($data['issued']);
            }
            if (isset($data['applies'])) {
                $this->setApplies($data['applies']);
            }
            if (isset($data['subject'])) {
                if (is_array($data['subject'])) {
                    foreach($data['subject'] as $d) {
                        $this->addSubject($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"subject" must be array of objects or null, '.gettype($data['subject']).' seen.');
                }
            }
            if (isset($data['topic'])) {
                if (is_array($data['topic'])) {
                    foreach($data['topic'] as $d) {
                        $this->addTopic($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"topic" must be array of objects or null, '.gettype($data['topic']).' seen.');
                }
            }
            if (isset($data['authority'])) {
                if (is_array($data['authority'])) {
                    foreach($data['authority'] as $d) {
                        $this->addAuthority($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"authority" must be array of objects or null, '.gettype($data['authority']).' seen.');
                }
            }
            if (isset($data['domain'])) {
                if (is_array($data['domain'])) {
                    foreach($data['domain'] as $d) {
                        $this->addDomain($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"domain" must be array of objects or null, '.gettype($data['domain']).' seen.');
                }
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['subType'])) {
                if (is_array($data['subType'])) {
                    foreach($data['subType'] as $d) {
                        $this->addSubType($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"subType" must be array of objects or null, '.gettype($data['subType']).' seen.');
                }
            }
            if (isset($data['action'])) {
                if (is_array($data['action'])) {
                    foreach($data['action'] as $d) {
                        $this->addAction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"action" must be array of objects or null, '.gettype($data['action']).' seen.');
                }
            }
            if (isset($data['actionReason'])) {
                if (is_array($data['actionReason'])) {
                    foreach($data['actionReason'] as $d) {
                        $this->addActionReason($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"actionReason" must be array of objects or null, '.gettype($data['actionReason']).' seen.');
                }
            }
            if (isset($data['decisionType'])) {
                $this->setDecisionType($data['decisionType']);
            }
            if (isset($data['contentDerivative'])) {
                $this->setContentDerivative($data['contentDerivative']);
            }
            if (isset($data['securityLabel'])) {
                if (is_array($data['securityLabel'])) {
                    foreach($data['securityLabel'] as $d) {
                        $this->addSecurityLabel($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"securityLabel" must be array of objects or null, '.gettype($data['securityLabel']).' seen.');
                }
            }
            if (isset($data['agent'])) {
                if (is_array($data['agent'])) {
                    foreach($data['agent'] as $d) {
                        $this->addAgent($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"agent" must be array of objects or null, '.gettype($data['agent']).' seen.');
                }
            }
            if (isset($data['signer'])) {
                if (is_array($data['signer'])) {
                    foreach($data['signer'] as $d) {
                        $this->addSigner($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"signer" must be array of objects or null, '.gettype($data['signer']).' seen.');
                }
            }
            if (isset($data['valuedItem'])) {
                if (is_array($data['valuedItem'])) {
                    foreach($data['valuedItem'] as $d) {
                        $this->addValuedItem($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"valuedItem" must be array of objects or null, '.gettype($data['valuedItem']).' seen.');
                }
            }
            if (isset($data['term'])) {
                if (is_array($data['term'])) {
                    foreach($data['term'] as $d) {
                        $this->addTerm($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"term" must be array of objects or null, '.gettype($data['term']).' seen.');
                }
            }
            if (isset($data['bindingAttachment'])) {
                $this->setBindingAttachment($data['bindingAttachment']);
            }
            if (isset($data['bindingReference'])) {
                $this->setBindingReference($data['bindingReference']);
            }
            if (isset($data['friendly'])) {
                if (is_array($data['friendly'])) {
                    foreach($data['friendly'] as $d) {
                        $this->addFriendly($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"friendly" must be array of objects or null, '.gettype($data['friendly']).' seen.');
                }
            }
            if (isset($data['legal'])) {
                if (is_array($data['legal'])) {
                    foreach($data['legal'] as $d) {
                        $this->addLegal($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"legal" must be array of objects or null, '.gettype($data['legal']).' seen.');
                }
            }
            if (isset($data['rule'])) {
                if (is_array($data['rule'])) {
                    foreach($data['rule'] as $d) {
                        $this->addRule($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"rule" must be array of objects or null, '.gettype($data['rule']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->issued)) $json['issued'] = $this->issued;
        if (isset($this->applies)) $json['applies'] = $this->applies;
        if (0 < count($this->subject)) {
            $json['subject'] = [];
            foreach($this->subject as $subject) {
                $json['subject'][] = $subject;
            }
        }
        if (0 < count($this->topic)) {
            $json['topic'] = [];
            foreach($this->topic as $topic) {
                $json['topic'][] = $topic;
            }
        }
        if (0 < count($this->authority)) {
            $json['authority'] = [];
            foreach($this->authority as $authority) {
                $json['authority'][] = $authority;
            }
        }
        if (0 < count($this->domain)) {
            $json['domain'] = [];
            foreach($this->domain as $domain) {
                $json['domain'][] = $domain;
            }
        }
        if (isset($this->type)) $json['type'] = $this->type;
        if (0 < count($this->subType)) {
            $json['subType'] = [];
            foreach($this->subType as $subType) {
                $json['subType'][] = $subType;
            }
        }
        if (0 < count($this->action)) {
            $json['action'] = [];
            foreach($this->action as $action) {
                $json['action'][] = $action;
            }
        }
        if (0 < count($this->actionReason)) {
            $json['actionReason'] = [];
            foreach($this->actionReason as $actionReason) {
                $json['actionReason'][] = $actionReason;
            }
        }
        if (isset($this->decisionType)) $json['decisionType'] = $this->decisionType;
        if (isset($this->contentDerivative)) $json['contentDerivative'] = $this->contentDerivative;
        if (0 < count($this->securityLabel)) {
            $json['securityLabel'] = [];
            foreach($this->securityLabel as $securityLabel) {
                $json['securityLabel'][] = $securityLabel;
            }
        }
        if (0 < count($this->agent)) {
            $json['agent'] = [];
            foreach($this->agent as $agent) {
                $json['agent'][] = $agent;
            }
        }
        if (0 < count($this->signer)) {
            $json['signer'] = [];
            foreach($this->signer as $signer) {
                $json['signer'][] = $signer;
            }
        }
        if (0 < count($this->valuedItem)) {
            $json['valuedItem'] = [];
            foreach($this->valuedItem as $valuedItem) {
                $json['valuedItem'][] = $valuedItem;
            }
        }
        if (0 < count($this->term)) {
            $json['term'] = [];
            foreach($this->term as $term) {
                $json['term'][] = $term;
            }
        }
        if (isset($this->bindingAttachment)) $json['bindingAttachment'] = $this->bindingAttachment;
        if (isset($this->bindingReference)) $json['bindingReference'] = $this->bindingReference;
        if (0 < count($this->friendly)) {
            $json['friendly'] = [];
            foreach($this->friendly as $friendly) {
                $json['friendly'][] = $friendly;
            }
        }
        if (0 < count($this->legal)) {
            $json['legal'] = [];
            foreach($this->legal as $legal) {
                $json['legal'][] = $legal;
            }
        }
        if (0 < count($this->rule)) {
            $json['rule'] = [];
            foreach($this->rule as $rule) {
                $json['rule'][] = $rule;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Contract xmlns="http://hl7.org/fhir"></Contract>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->issued)) $this->issued->xmlSerialize(true, $sxe->addChild('issued'));
        if (isset($this->applies)) $this->applies->xmlSerialize(true, $sxe->addChild('applies'));
        if (0 < count($this->subject)) {
            foreach($this->subject as $subject) {
                $subject->xmlSerialize(true, $sxe->addChild('subject'));
            }
        }
        if (0 < count($this->topic)) {
            foreach($this->topic as $topic) {
                $topic->xmlSerialize(true, $sxe->addChild('topic'));
            }
        }
        if (0 < count($this->authority)) {
            foreach($this->authority as $authority) {
                $authority->xmlSerialize(true, $sxe->addChild('authority'));
            }
        }
        if (0 < count($this->domain)) {
            foreach($this->domain as $domain) {
                $domain->xmlSerialize(true, $sxe->addChild('domain'));
            }
        }
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->subType)) {
            foreach($this->subType as $subType) {
                $subType->xmlSerialize(true, $sxe->addChild('subType'));
            }
        }
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
            }
        }
        if (0 < count($this->actionReason)) {
            foreach($this->actionReason as $actionReason) {
                $actionReason->xmlSerialize(true, $sxe->addChild('actionReason'));
            }
        }
        if (isset($this->decisionType)) $this->decisionType->xmlSerialize(true, $sxe->addChild('decisionType'));
        if (isset($this->contentDerivative)) $this->contentDerivative->xmlSerialize(true, $sxe->addChild('contentDerivative'));
        if (0 < count($this->securityLabel)) {
            foreach($this->securityLabel as $securityLabel) {
                $securityLabel->xmlSerialize(true, $sxe->addChild('securityLabel'));
            }
        }
        if (0 < count($this->agent)) {
            foreach($this->agent as $agent) {
                $agent->xmlSerialize(true, $sxe->addChild('agent'));
            }
        }
        if (0 < count($this->signer)) {
            foreach($this->signer as $signer) {
                $signer->xmlSerialize(true, $sxe->addChild('signer'));
            }
        }
        if (0 < count($this->valuedItem)) {
            foreach($this->valuedItem as $valuedItem) {
                $valuedItem->xmlSerialize(true, $sxe->addChild('valuedItem'));
            }
        }
        if (0 < count($this->term)) {
            foreach($this->term as $term) {
                $term->xmlSerialize(true, $sxe->addChild('term'));
            }
        }
        if (isset($this->bindingAttachment)) $this->bindingAttachment->xmlSerialize(true, $sxe->addChild('bindingAttachment'));
        if (isset($this->bindingReference)) $this->bindingReference->xmlSerialize(true, $sxe->addChild('bindingReference'));
        if (0 < count($this->friendly)) {
            foreach($this->friendly as $friendly) {
                $friendly->xmlSerialize(true, $sxe->addChild('friendly'));
            }
        }
        if (0 < count($this->legal)) {
            foreach($this->legal as $legal) {
                $legal->xmlSerialize(true, $sxe->addChild('legal'));
            }
        }
        if (0 < count($this->rule)) {
            foreach($this->rule as $rule) {
                $rule->xmlSerialize(true, $sxe->addChild('rule'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}