<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * TestScript is a resource that specifies a suite of tests against a FHIR server implementation to determine compliance against the FHIR specification.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRTestScript extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URL that is used to identify this test script when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this test script is (or will be) published. The URL SHOULD include the major version of the test script. For more information see [Technical and Business Versions](resource.html#versions).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A formal identifier that is used to identify this test script when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The identifier that is used to identify this version of the test script when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the test script author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions are orderable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A natural language name identifying the test script. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A short, descriptive, user-friendly title for the test script.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The status of this test script. Enables tracking the life-cycle of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * A flag to indicate that this test script is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The name of the individual or organization that published the test script.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
     */
    public $contact = array();

    /**
     * The date  (and optionally time) when the test script was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the test script changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A free text natural language description of the test script from the consumer's perspective.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of code system definitions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext[]
     */
    public $useContext = array();

    /**
     * A jurisdiction in which the test script is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = array();

    /**
     * Explains why this test script is needed and why it has been designed as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * A copyright statement relating to the test script and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the test script.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * An abstract server used in operations within this test script in the origin element.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptOrigin[]
     */
    public $origin = array();

    /**
     * An abstract server used in operations within this test script in the destination element.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptDestination[]
     */
    public $destination = array();

    /**
     * The required capability must exist and are assumed to function correctly on the FHIR server being tested.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptMetadata
     */
    public $metadata = null;

    /**
     * Fixture in the test script - by reference (uri). All fixtures are required for the test script to execute.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptFixture[]
     */
    public $fixture = array();

    /**
     * Reference to the profile to be used for validation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $profile = array();

    /**
     * Variable is set based either on element value in response body or on header field value in the response headers.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptVariable[]
     */
    public $variable = array();

    /**
     * Assert rule to be used in one or more asserts within the test script.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptRule[]
     */
    public $rule = array();

    /**
     * Contains one or more rules.  Offers a way to group rules so assertions could reference the group of rules and have them all applied.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptRuleset[]
     */
    public $ruleset = array();

    /**
     * A series of required setup operations before tests are executed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptSetup
     */
    public $setup = null;

    /**
     * A test in this script.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptTest[]
     */
    public $test = array();

    /**
     * A series of operations required to clean up after the all the tests are executed (successfully or otherwise).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptTeardown
     */
    public $teardown = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'TestScript';

    /**
     * An absolute URL that is used to identify this test script when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this test script is (or will be) published. The URL SHOULD include the major version of the test script. For more information see [Technical and Business Versions](resource.html#versions).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URL that is used to identify this test script when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this test script is (or will be) published. The URL SHOULD include the major version of the test script. For more information see [Technical and Business Versions](resource.html#versions).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * A formal identifier that is used to identify this test script when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A formal identifier that is used to identify this test script when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the test script when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the test script author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions are orderable.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the test script when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the test script author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions are orderable.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A natural language name identifying the test script. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A natural language name identifying the test script. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the test script.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A short, descriptive, user-friendly title for the test script.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * The status of this test script. Enables tracking the life-cycle of the content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this test script. Enables tracking the life-cycle of the content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A flag to indicate that this test script is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A flag to indicate that this test script is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The name of the individual or organization that published the test script.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the test script.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactDetail $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The date  (and optionally time) when the test script was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the test script changes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the test script was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the test script changes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * A free text natural language description of the test script from the consumer's perspective.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the test script from the consumer's perspective.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of code system definitions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of code system definitions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUsageContext $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A jurisdiction in which the test script is intended to be used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A jurisdiction in which the test script is intended to be used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * Explains why this test script is needed and why it has been designed as it has.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Explains why this test script is needed and why it has been designed as it has.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * A copyright statement relating to the test script and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the test script.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the test script and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the test script.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $copyright
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * An abstract server used in operations within this test script in the origin element.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptOrigin[]
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * An abstract server used in operations within this test script in the origin element.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptOrigin $origin
     * @return $this
     */
    public function addOrigin($origin)
    {
        $this->origin[] = $origin;
        return $this;
    }

    /**
     * An abstract server used in operations within this test script in the destination element.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptDestination[]
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * An abstract server used in operations within this test script in the destination element.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptDestination $destination
     * @return $this
     */
    public function addDestination($destination)
    {
        $this->destination[] = $destination;
        return $this;
    }

    /**
     * The required capability must exist and are assumed to function correctly on the FHIR server being tested.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * The required capability must exist and are assumed to function correctly on the FHIR server being tested.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptMetadata $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * Fixture in the test script - by reference (uri). All fixtures are required for the test script to execute.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptFixture[]
     */
    public function getFixture()
    {
        return $this->fixture;
    }

    /**
     * Fixture in the test script - by reference (uri). All fixtures are required for the test script to execute.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptFixture $fixture
     * @return $this
     */
    public function addFixture($fixture)
    {
        $this->fixture[] = $fixture;
        return $this;
    }

    /**
     * Reference to the profile to be used for validation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Reference to the profile to be used for validation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $profile
     * @return $this
     */
    public function addProfile($profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * Variable is set based either on element value in response body or on header field value in the response headers.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptVariable[]
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Variable is set based either on element value in response body or on header field value in the response headers.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptVariable $variable
     * @return $this
     */
    public function addVariable($variable)
    {
        $this->variable[] = $variable;
        return $this;
    }

    /**
     * Assert rule to be used in one or more asserts within the test script.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptRule[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Assert rule to be used in one or more asserts within the test script.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptRule $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * Contains one or more rules.  Offers a way to group rules so assertions could reference the group of rules and have them all applied.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptRuleset[]
     */
    public function getRuleset()
    {
        return $this->ruleset;
    }

    /**
     * Contains one or more rules.  Offers a way to group rules so assertions could reference the group of rules and have them all applied.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptRuleset $ruleset
     * @return $this
     */
    public function addRuleset($ruleset)
    {
        $this->ruleset[] = $ruleset;
        return $this;
    }

    /**
     * A series of required setup operations before tests are executed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptSetup
     */
    public function getSetup()
    {
        return $this->setup;
    }

    /**
     * A series of required setup operations before tests are executed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptSetup $setup
     * @return $this
     */
    public function setSetup($setup)
    {
        $this->setup = $setup;
        return $this;
    }

    /**
     * A test in this script.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptTest[]
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * A test in this script.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptTest $test
     * @return $this
     */
    public function addTest($test)
    {
        $this->test[] = $test;
        return $this;
    }

    /**
     * A series of operations required to clean up after the all the tests are executed (successfully or otherwise).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptTeardown
     */
    public function getTeardown()
    {
        return $this->teardown;
    }

    /**
     * A series of operations required to clean up after the all the tests are executed (successfully or otherwise).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptTeardown $teardown
     * @return $this
     */
    public function setTeardown($teardown)
    {
        $this->teardown = $teardown;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->url) $json['url'] = json_encode($this->url);
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (null !== $this->version) $json['version'] = json_encode($this->version);
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->title) $json['title'] = json_encode($this->title);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->experimental) $json['experimental'] = json_encode($this->experimental);
        if (null !== $this->publisher) $json['publisher'] = json_encode($this->publisher);
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                $json['contact'][] = json_encode($contact);
            }
        }
        if (null !== $this->date) $json['date'] = json_encode($this->date);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (0 < count($this->useContext)) {
            $json['useContext'] = [];
            foreach($this->useContext as $useContext) {
                $json['useContext'][] = json_encode($useContext);
            }
        }
        if (0 < count($this->jurisdiction)) {
            $json['jurisdiction'] = [];
            foreach($this->jurisdiction as $jurisdiction) {
                $json['jurisdiction'][] = json_encode($jurisdiction);
            }
        }
        if (null !== $this->purpose) $json['purpose'] = json_encode($this->purpose);
        if (null !== $this->copyright) $json['copyright'] = json_encode($this->copyright);
        if (0 < count($this->origin)) {
            $json['origin'] = [];
            foreach($this->origin as $origin) {
                $json['origin'][] = json_encode($origin);
            }
        }
        if (0 < count($this->destination)) {
            $json['destination'] = [];
            foreach($this->destination as $destination) {
                $json['destination'][] = json_encode($destination);
            }
        }
        if (null !== $this->metadata) $json['metadata'] = json_encode($this->metadata);
        if (0 < count($this->fixture)) {
            $json['fixture'] = [];
            foreach($this->fixture as $fixture) {
                $json['fixture'][] = json_encode($fixture);
            }
        }
        if (0 < count($this->profile)) {
            $json['profile'] = [];
            foreach($this->profile as $profile) {
                $json['profile'][] = json_encode($profile);
            }
        }
        if (0 < count($this->variable)) {
            $json['variable'] = [];
            foreach($this->variable as $variable) {
                $json['variable'][] = json_encode($variable);
            }
        }
        if (0 < count($this->rule)) {
            $json['rule'] = [];
            foreach($this->rule as $rule) {
                $json['rule'][] = json_encode($rule);
            }
        }
        if (0 < count($this->ruleset)) {
            $json['ruleset'] = [];
            foreach($this->ruleset as $ruleset) {
                $json['ruleset'][] = json_encode($ruleset);
            }
        }
        if (null !== $this->setup) $json['setup'] = json_encode($this->setup);
        if (0 < count($this->test)) {
            $json['test'] = [];
            foreach($this->test as $test) {
                $json['test'][] = json_encode($test);
            }
        }
        if (null !== $this->teardown) $json['teardown'] = json_encode($this->teardown);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TestScript xmlns="http://hl7.org/fhir"></TestScript>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->experimental) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (null !== $this->publisher) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->useContext)) {
            foreach($this->useContext as $useContext) {
                $useContext->xmlSerialize(true, $sxe->addChild('useContext'));
            }
        }
        if (0 < count($this->jurisdiction)) {
            foreach($this->jurisdiction as $jurisdiction) {
                $jurisdiction->xmlSerialize(true, $sxe->addChild('jurisdiction'));
            }
        }
        if (null !== $this->purpose) $this->purpose->xmlSerialize(true, $sxe->addChild('purpose'));
        if (null !== $this->copyright) $this->copyright->xmlSerialize(true, $sxe->addChild('copyright'));
        if (0 < count($this->origin)) {
            foreach($this->origin as $origin) {
                $origin->xmlSerialize(true, $sxe->addChild('origin'));
            }
        }
        if (0 < count($this->destination)) {
            foreach($this->destination as $destination) {
                $destination->xmlSerialize(true, $sxe->addChild('destination'));
            }
        }
        if (null !== $this->metadata) $this->metadata->xmlSerialize(true, $sxe->addChild('metadata'));
        if (0 < count($this->fixture)) {
            foreach($this->fixture as $fixture) {
                $fixture->xmlSerialize(true, $sxe->addChild('fixture'));
            }
        }
        if (0 < count($this->profile)) {
            foreach($this->profile as $profile) {
                $profile->xmlSerialize(true, $sxe->addChild('profile'));
            }
        }
        if (0 < count($this->variable)) {
            foreach($this->variable as $variable) {
                $variable->xmlSerialize(true, $sxe->addChild('variable'));
            }
        }
        if (0 < count($this->rule)) {
            foreach($this->rule as $rule) {
                $rule->xmlSerialize(true, $sxe->addChild('rule'));
            }
        }
        if (0 < count($this->ruleset)) {
            foreach($this->ruleset as $ruleset) {
                $ruleset->xmlSerialize(true, $sxe->addChild('ruleset'));
            }
        }
        if (null !== $this->setup) $this->setup->xmlSerialize(true, $sxe->addChild('setup'));
        if (0 < count($this->test)) {
            foreach($this->test as $test) {
                $test->xmlSerialize(true, $sxe->addChild('test'));
            }
        }
        if (null !== $this->teardown) $this->teardown->xmlSerialize(true, $sxe->addChild('teardown'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}