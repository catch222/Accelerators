<!--
/* * *******************************************************************************************
 *  This file is part of the Oracle Service Cloud Accelerator Reference Integration set published
 *  by Oracle Service Cloud under the MIT license (MIT) included in the original distribution.
 *  Copyright (c) 2014, 2015, Oracle and/or its affiliates. All rights reserved.
 ***********************************************************************************************
 *  Accelerator Package: OSVC Contact Center + Siebel Case Management Accelerator
 *  link: http://www.oracle.com/technetwork/indexes/samplecode/accelerator-osvc-2525361.html
 *  OSvC release: 15.8 (August 2015)
 *  Siebel release: 8.1.1.15
 *  reference: 150520-000047
 *  date: Mon Nov 30 20:14:22 PST 2015

 *  revision: rnw-15-11-fixes-release-2
 *  SHA1: $Id: 40619583afc4835f2f2cbacc1dfbc74386ad4787 $
 * *********************************************************************************************
 *  File: view.php
 * ****************************************************************************************** */
-->

<rn:block id='TextInput-postLabel'>
    <div id="rn_<?= $this->instanceID ?>_ValidationResultDisplay" class="rn_Hidden"></div> 
</rn:block>


<rn:block id='TextInput-bottom'>
<!--<input type="submit" id="rn_<?= $this->instanceID; ?>_VerifySubmit" value="Verify"/>-->
<button class="rn_VerifyButton" id="rn_<?= $this->instanceID; ?>_VerifySubmit" type="button">Verify...</button>
<span id="rn_<?= $this->instanceID; ?>_Loading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
</rn:block>
