<?php


namespace com\realexpayments\remote\sdk\domain\payment\normaliser;


use com\realexpayments\remote\sdk\domain\PhoneNumbers;
use com\realexpayments\remote\sdk\SafeArrayAccess;
use com\realexpayments\remote\sdk\utils\NormaliserHelper;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PhoneNumbersNormalizer implements NormalizerInterface,DenormalizerInterface {

	/**
	 * Normalizes an object into a set of arrays/scalars.
	 *
	 * @param object $object object to normalize
	 * @param string $format format the normalization result will be encoded as
	 * @param array $context Context options for the normalizer
	 *
	 * @return array|string|bool|int|float|null
	 */
	public function normalize( $object, $format = null, array $context = array() ) {
		/** @var PhoneNumbers $object */

		return array_filter( array(
			'home'   => $object->getHomePhoneNumber(),
			'work'   => $object->getWorkPhoneNumber(),
			'fax'    => $object->getFaxPhoneNumber(),
			'mobile' => $object->getMobilePhoneNumber()
		), array( NormaliserHelper::GetClassName(), "filter_data" ) );
	}

	/**
	 * Checks whether the given class is supported for normalization by this normalizer.
	 *
	 * @param mixed $data Data to normalize.
	 * @param string $format The format being (de-)serialized from or into.
	 *
	 * @return bool
	 */
	public function supportsNormalization( $data, $format = null ) {
		if ( $format == "xml" && $data instanceof PhoneNumbers ) {
			return true;
		}

		return false;
	}

	/**
	 * Denormalizes data back into an object of the given class.
	 *
	 * @param mixed $data data to restore
	 * @param string $class the expected class to instantiate
	 * @param string $format format the given data was extracted from
	 * @param array $context options available to the denormalizer
	 *
	 * @return object
	 */
	public function denormalize( $data, $class, $format = null, array $context = array() ) {
		if ( is_null( $data ) ) {
			return null;
		}

		$data = new SafeArrayAccess( $data );

		$phoneNumbers = new PhoneNumbers();
		$phoneNumbers->setHomePhoneNumber($data['home']);
		$phoneNumbers->setWorkPhoneNumber($data['work']);
		$phoneNumbers->setFaxPhoneNumber($data['fax']);
		$phoneNumbers->setMobilePhoneNumber($data['mobile']);

		return $phoneNumbers;
	}

	/**
	 * Checks whether the given class is supported for denormalization by this normalizer.
	 *
	 * @param mixed $data Data to denormalize from.
	 * @param string $type The class to which the data should be denormalized.
	 * @param string $format The format being deserialized from.
	 *
	 * @return bool
	 */
	public function supportsDenormalization( $data, $type, $format = null ) {
		if ( $format == "xml" && $type == PhoneNumbers::GetClassName() ) {
			return true;
		}

		return false;
	}
}