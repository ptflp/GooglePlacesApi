# GooglePlacesApi

# Example

```php
...
		$container = new DI\Container();
		$gapi = $container->get('GooglePlacesApi');

		$cityObj = $gapi
					->setApiKey($key)
					->requestCitiesByName($city)
					->findOne()
					->requestDetails('geometry,address_components')
					->getResults();
		$placesDetails = $gapi
						->requestPlacesByCity($city,$place)
						->requestDetails('geometry,address_components,types')
						->getResults();
		$addressDetails = $gapi
							->requestAdressByCity($city,$address)
							->requestDetails('geometry,address_components')
							->getResults();


		echo '<pre>';
		print_r($addressDetails);
		echo '</pre>';

		echo '<pre>';
		print_r($placesDetails);
		echo '</pre>';

		echo '<pre>';
		print_r($cityObj);
		echo '</pre>';
```