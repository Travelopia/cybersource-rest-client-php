# Ptsv2paymentsTravelInformationAutoRental

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**noShowIndicator** | **bool** | No Show Indicator provides an indicator noting that the individual did not show up after making a reservation for a vehicle. Possible values: - true - false | [optional] 
**customerName** | **string** | Name of the individual making the rental agreement.  Valid data lengths by card:  |Card Specific Validation|VISA|MasterCard|Discover|AMEX| |--- |--- |--- |--- | | Filed Length| 40| 40| 29| 26| | Field Type| AN| ANS| AN| AN| | M/O/C| O| M| M| M| | [optional] 
**vehicleClass** | **string** | Classification of the rented auto.  **NOTE** For VISA, this is a 2-byte optional code.  Valid values for American Express &amp; MasterCard:  |American Express |MasterCard |Description| |--- |--- |--- | | 0001| 0001| Mini| | 0002| 0002| Subcompact| | 0003| 0003| Economy| | 0004| 0004| Compact| | 0005| 0005| Midsize| | 0006| 0006| Intermediate| | 0007| 0007| Standard| | 0008| 0008| Fulll size| | 0009| 0009| Luxury| | 0010| 0010| Premium| | 0011| 0011| Minivan| | 0012| 0012| 12-passenger van| | 0013| 0013| Moving van| | 0014| 0014| 15-passenger van| | 0015| 0015| Cargo van| | 0016| 0016| 12-foot truck| | 0017| 0017| 20-foot truck| | 0018| 0018| 24-foot truck| | 0019| 0019| 26-foot truck| | 0020| 0020| Moped| | 0021| 0021| Stretch| | 0022| 0022| Regular| | 0023| 0023| Unique| | 0024| 0024| Exotic| | 0025| 0025| Small/medium truck| | 0026| 0026| Large truck| | 0027| 0027| Small SUV| | 0028| 0028| Medium SUV| | 0029| 0029| Large SUV| | 0030| 0030| Exotic SUV| | 9999| 9999| Miscellaneous|  Additional Values allowed **only** for &#x60;American Express&#x60;:  |American Express|MasterCard|Description| |--- |--- |--- | | 0031| NA| Four Wheel Drive| | 0032| NA| Special| | 0099| NA| Taxi| | [optional] 
**distanceTravelled** | **string** | Total number of miles driven by the customer. This field is supported only for MasterCard and American Express. | [optional] 
**distanceUnit** | **string** | Miles/Kilometers Indicator shows whether the \&quot;miles\&quot; fields are expressed in miles or kilometers.  Allowed values: - &#x60;K&#x60; - Kilometers - &#x60;M&#x60; - Miles | [optional] 
**returnDateTime** | **string** | Date/time the auto was returned to the rental agency. Format: &#x60;&#x60;yyyy-MM-dd HH-mm-ss z&#x60;&#x60; This field is supported for Visa, MasterCard, and American Express. | [optional] 
**rentalDateTime** | **string** | Date/time the auto was picked up from the rental agency. Format: &#x60;yyyy-MM-dd HH-mm-ss z&#x60; This field is supported for Visa, MasterCard, and American Express. | [optional] 
**maxFreeDistance** | **string** | Maximum number of free miles or kilometers allowed to a customer for the duration of the auto rental agreement. This field is supported only for MasterCard and American Express. | [optional] 
**insuranceIndicator** | **bool** | Used for MC and Discover  Valid values: - &#x60;true&#x60; - Yes (insurance was purchased) - &#x60;false&#x60; - No (insurance was not purchased) | [optional] 
**programCode** | **string** | Used to identify special circumstances applicable to the Card Transaction or Cardholder, such as \&quot;renter\&quot; or \&quot;show\&quot;.  This code is &#x60;2 digit&#x60; value agreed by Merchant and processor. | [optional] 
**returnAddress** | [**\CyberSource\Model\Ptsv2paymentsTravelInformationAutoRentalReturnAddress**](Ptsv2paymentsTravelInformationAutoRentalReturnAddress.md) |  | [optional] 
**rentalAddress** | [**\CyberSource\Model\Ptsv2paymentsTravelInformationAutoRentalRentalAddress**](Ptsv2paymentsTravelInformationAutoRentalRentalAddress.md) |  | [optional] 
**agreementNumber** | **string** | Auto rental agency&#39;s agreement (invoice) number provided to the customer. It is used to trace any inquiries about transactions. This field is supported for Visa, MasterCard, and American Express. This Merchant-defined value, which may be composed of any combination of characters and/or numerals, may become part of the descriptive bill on the Cardmember&#39;s statement. | [optional] 
**odometerReading** | **string** | Odometer reading at time of vehicle rental. | [optional] 
**vehicleIdentificationNumber** | **string** | This field contains a unique identifier assigned by the company to the vehicle. | [optional] 
**companyId** | **string** | Corporate Identifier provides the unique identifier of the corporation or entity renting the vehicle:  |Card Specific Validation|VISA|MasterCard|Discover|AMEX| |--- |--- |--- |--- | | Filed Length| NA| 12| NA| NA| | Field Type| NA| AN| NA| NA| | M/O/C| NA| O| NA| NA| | [optional] 
**numberOfAdditionalDrivers** | **string** | The number of additional drivers included on the rental agreement not including the individual who signed the rental agreement. | [optional] 
**driverAge** | **string** | Age of the driver renting the vehicle. | [optional] 
**specialProgramCode** | **string** | Program code used to identify special circumstances, such as \&quot;frequent renter\&quot; or \&quot;no show\&quot; status for the renter. Possible values: - &#x60;0&#x60;: not applicable (default) - &#x60;1&#x60;: frequent renter - &#x60;2&#x60;: no show  For authorizations, this field is supported only for Visa.  For captures, this field is supported for Visa, MasterCard, and American Express.  Code for special programs applicable to the Card Transaction or the Cardholder. | [optional] 
**vehicleMake** | **string** | Make of the vehicle being rented (e.g., Chevrolet or Ford). | [optional] 
**vehicleModel** | **string** | Model of the vehicle being rented (e.g., Cavalier or Focus). | [optional] 
**timePeriod** | **string** | Indicates the time period for which the vehicle rental rate applies (e.g., daily, weekly or monthly). Daily, Weekly and Monthly are valid values. | [optional] 
**commodityCode** | **string** | Commodity code or International description code used to classify the item. Contact your acquirer for a list of codes. | [optional] 
**customerServicePhoneNumber** | **string** | Customer service telephone number that is used to resolve questions or disputes. Include the area code, exchange, and number. This field is supported only for MasterCard and American Express. | [optional] 
**taxDetails** | [**\CyberSource\Model\Ptsv2paymentsTravelInformationAutoRentalTaxDetails**](Ptsv2paymentsTravelInformationAutoRentalTaxDetails.md) |  | [optional] 
**insuranceAmount** | **string** | Insurance charges. Field is conditional and can include decimal point. | [optional] 
**oneWayDropOffAmount** | **string** | Extra charges incurred for a one-way rental agreement for the auto. This field is supported only for Visa. | [optional] 
**adjustedAmountIndicator** | **string** | For **MasterCard** and **Discover**: Adjusted amount indicator code that indicates any miscellaneous charges incurred after the auto was returned. Possible values: - &#x60;A&#x60; - Drop-off charges - &#x60;B&#x60; - Delivery charges - &#x60;C&#x60; - Parking expenses - &#x60;D&#x60; - Extra hours - &#x60;E&#x60; - Violations - &#x60;X&#x60; - More than one of the above charges  For **American Express**: Audit indicator code that indicates any adjustment for mileage, fuel, auto damage, etc. made to a rental agreement and whether the cardholder was notified.  Possible value for the authorization service: - &#x60;A&#x60; (default): adjustment amount greater than 0 (zero)  Possible values for the capture service: - &#x60;X&#x60; - Multiple adjustments - &#x60;Y&#x60; - One adjustment only; Cardmember notified - &#x60;Z&#x60; - One adjustment only; Cardmember not notified. This value is used as the default if the request does not include this field and includes an adjustment amount greater than 0 (zero). This is an optional field. | [optional] 
**adjustedAmount** | **string** | Adjusted Amount indicates whether any miscellaneous charges were incurred after the vehicle was returned.  For authorizations, this field is supported only for American Express.  For captures, this field is supported only for MasterCard and American Express. **NOTE** For American Express, this field is required if the &#x60;travelInformation.autoRental.adjustedAmountIndicator&#x60; field is included in the request and has a value; otherwise, this field is optional.  For all other card types, this field is ignored. | [optional] 
**fuelCharges** | **string** | Extra gasoline charges that extend beyond the basic rental agreement. This field is supported only for Visa. | [optional] 
**weeklyRentalRate** | **string** | Weekly Rental Amount provides the amount charged for a seven-day rental period. Field - Time Period needs to be populated with Weekly if this field is present | [optional] 
**dailyRentalRate** | **string** | Daily auto rental rate charged. This field is supported only for MasterCard and American Express.  Field - Time Period needs to be populated with Daily if this field is present | [optional] 
**ratePerMile** | **string** | Rate charged for each mile. This field is supported only for MasterCard and American Express. | [optional] 
**mileageCharge** | **string** | Regular Mileage Charge provides the amount charged for regular miles traveled during vehicle rental. Two decimal places | [optional] 
**extraMileageCharge** | **string** | Extra mileage charges that extend beyond the basic rental agreement. This field is supported only for Visa. | [optional] 
**lateFeeAmount** | **string** | Extra charges related to a late return of the rented auto. This field is supported only for Visa. | [optional] 
**towingCharge** | **string** | (Towing Charges) provides the amount charged to tow the rental vehicle. | [optional] 
**extraCharge** | **string** | (Extra Charges) provides the extra charges associated with the vehicle rental. | [optional] 
**gpsCharge** | **string** | Amount charged for renting a Global Positioning Service (GPS). | [optional] 
**phoneCharge** | **string** | Additional charges incurred for phone usage included on the total bill. | [optional] 
**parkingViolationCharge** | **string** | Extra charges incurred due to a parking violation for the auto. This field is supported only for Visa. | [optional] 
**otherCharges** | **string** | Total amount charged for all other miscellaneous charges not previously defined. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


