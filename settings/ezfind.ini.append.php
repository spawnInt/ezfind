<?php /*

[SiteSettings]
# Prepend site URL with http:// or https://
URLProtocol=http://
# Site index public available. For changes to take effect, the search
# index must be updated by running bin/php/updatesearchindex.php
IndexPubliclyAvailable=enabled
# Search other installations
SearchOtherInstallations=enabled

[FacetSettings]
# Installation name map. The key is the installation ID,
# and the value is the name displayed in the design templates.
#
# Use this SQL to get the value : SELECT value FROM ezsite_data WHERE name='ezfind_site_id';
# Example:
# SiteNameList[]
# SiteNameList[3e731797af0a6b79e943eefaf437f956]=eZ.no
SiteNameList[]

[SolrFieldMapSettings]
# List of custom datatype mapping. eZ Publish datatype string is used
# as key, and the value if the name of the class to use.
#
# Example:
# CustomMap[eztext]=ezfSolrDocumentFieldText
CustomMap[ezobjectrelation]=ezfSolrDocumentFieldObjectRelation
CustomMap[ezobjectrelationlist]=ezfSolrDocumentFieldObjectRelation

# Datatype to field type map.
#
# Example:
# DatatypeMap[eztext]=text
DatatypeMap[ezboolean]=boolean
DatatypeMap[ezdate]=date
DatatypeMap[ezdatetime]=date
DatatypeMap[ezfloat]=sfloat
DatatypeMap[ezinteger]=sint
DatatypeMap[ezprice]=sfloat
DatatypeMap[eztime]=date

# Default field type
Default=text


###Boost factors used when indexing
#When multiple boost factors match, they are ADDED, not multiplied
#be ware of mixin boost factors on class and attribute level: Solr/Lucene does MULTIPLY the class boost factor with the attribute boost factor

[IndexBoost]
#MetaField: set boost factors on meta fields, boost per field
# Metafield: not yet implemented !!
MetaField[]
#MetaField[name]=2.0
#MetaField[owner_name]=2.0


#ClassBoost: set boost factors on document (object) level
#format Class[<attribute identifier>]=<boost factor as int or float>
Class[]
#Class[user]=3.0

#AttributeBoost: set boost factors on attributes at field level
#you can specify the class identifier as optional (!) element for greatest flexibility
#If more than attributeidentifier is used, the last one has precedence
Attribute[]
#Attribute[user/last_name]=2.0
#Attribute[user/first_name]=2.0
#Attribute[title]=1.5

#AttributeBoost: set boost factors on attributes at field level based on their datatype
Datatype[]
#Datatype[ezkeyword]=3.0

#ReverseRelatedScale: scale factor to use in $boost = $boost + <scalefactor> * <number of reverse relations>

ReverseRelatedScale=0
#ReverseRelatedScale=0.5

[IndexExclude]
#exclude certain objects from indexing alltogether
#only classes supported for now

ClassIdentifierList[]
#ClassIdentifierList[]=folder
#ClassIdentifierList[]=secret

[SearchFilters]
#Search filters to be applied for every query made 
#Currently support for one filter type, a raw Solr query string
RawFilterList[]
#RawFilterList[]='meta_class_identifier_string:[* TO *] -meta_class_identifier_string:folder'

*/ ?>