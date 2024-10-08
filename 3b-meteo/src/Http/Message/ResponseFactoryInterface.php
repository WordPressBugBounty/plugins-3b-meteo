<?php
declare(strict_types=1);

namespace TreBiMeteo\Http\Message;

interface ResponseFactoryInterface {

	/**
	 * Create a new response.
	 *
	 * @param int $code The HTTP status code. Defaults to 200.
	 * @param string $reasonPhrase The reason phrase to associate with the status code
	 *     in the generated response. If none is provided, implementations MAY use
	 *     the defaults as suggested in the HTTP specification.
	 */
	public function createResponse(int $code = 200, string $reasonPhrase = ''): \WP_REST_Response;
}
