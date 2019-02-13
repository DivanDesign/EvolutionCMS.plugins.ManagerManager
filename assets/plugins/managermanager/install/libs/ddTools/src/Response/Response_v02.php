<?php
namespace DDTools\Response;


use DDTools\Response;

/**
 * Class Response_v02
 * 
 * @package DDTools\Response
 */
class Response_v02 extends Response
{
	/**
	 * allowedMetaKeys
	 * 
	 * Allowed keys in $this->meta.
	 * 
	 * @var array
	 */
	protected static $allowedMetaKeys = array(
		'code', 'eTag', 'success', 'message'
	);
	
	/**
	 * allowedMetaMessageKeys
	 * 
	 * Allowed keys in $this->meta['message'].
	 * 
	 * @var array
	 */
	protected static $allowedMetaMessageKeys = array(
		'content', 'title'
	);
	
	/**
	 * validateMeta
	 * 
	 * @param array $meta - is an array of meta data. The method excludes any values passed in $meta except “code”, “eTag”, “success”,
	 * and “message”. $meta['code'] and $meta['success'] are required. If defined, $meta['message'] must be an associative array with content
	 * and, optionally, with a title.
	 * 
	 * Examples:
	 * 
	 * ```php
	 * $meta = array(
	 * 		"code" => 200, // REQUIRED
	 * 		"success" => true // REQUIRED
	 * );
	 * 
	 * $meta = array(
	 * 		"code" => 201, // REQUIRED
	 * 		"success" => true, // REQUIRED
	 * 		"message" => array(
	 * 			"content" => "You have successfully signed up. You will be redirected to your account in a moment.", // REQUIRED
	 * 			"title" => "Success!"
	 * 		)
	 * );
	 * ```
	 * 
	 * @return bool
	 */
	public function validateMeta(array $meta){
		$output = false;
		
		if(
			//code is set and int
			isset($meta['code']) && is_int($meta['code']) &&
			//success is set and bool
			isset($meta['success']) && is_bool($meta['success']) &&
			(
				//message is not set
				!isset($meta['message']) ||
				(
					//message is set and contains content
					is_array($meta['message']) && isset($meta['message']['content'])
				)
			)
		){
			if(
				//there is no diff between meta keys and allowed meta keys
				!count(array_diff(array_keys($meta), static::$allowedMetaKeys)) &&
				(
					//message is not set
					!isset($meta['message']) ||
					//there is no diff between meta message keys and allowed meta message keys
					!count(array_diff(array_keys($meta['message']), static::$allowedMetaMessageKeys))
				)
			){
				$output = true;
			}
		}
		
		return $output;
	}
}