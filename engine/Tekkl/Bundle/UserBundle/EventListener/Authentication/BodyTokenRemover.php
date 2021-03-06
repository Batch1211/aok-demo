<?php 
/**
 * This file is part of the TEKKL core package
 *
 * (c) Alexander Bachmann <email.bachmann@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tekkl\Bundle\UserBundle\EventListener\Authentication;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;

class BodyTokenRemover {
	public function onAuthenticationSuccess(AuthenticationSuccessEvent $event){
		$data = $event->getData();
		if(isset($data['token'])) unset($data['token']);
		$event->setData($data);
	}
}