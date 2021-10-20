# # IssuedDocumentEiData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vat_kind** | **string** | Vat kind (esigibilità IVA). | [optional]
**original_document_type** | **string** | Type of document followed by the the current invoice. | [optional] [default to ORIGINAL_DOCUMENT_TYPE_ORDINE]
**od_number** | **string** | Original document number. | [optional]
**od_date** | [**\DateTime**](\DateTime.md) | Original document date. | [optional]
**cig** | **string** | CIG. | [optional]
**cup** | **string** | CUP. | [optional]
**payment_method** | **string** | Payment method (see https://www.fatturapa.gov.it/export/documenti/fatturapa/v1.2.1/Rappresentazione-tabellare-fattura-ordinaria.pdf for the accepted values of ModalitaPagamento). | [optional]
**bank_name** | **string** | Bank name. | [optional]
**bank_iban** | **string** | IBAN. | [optional]
**bank_beneficiary** | **string** | Bank beneficiary. | [optional]
**invoice_number** | **string** | Invoice number. | [optional]
**invoice_date** | [**\DateTime**](\DateTime.md) | Invoice date. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)