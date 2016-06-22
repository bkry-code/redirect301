<?php
class redirect301 {
	public $uri;
	public $redirects;

	public function __construct() {
		$this->uri = $this->getUri();
		$this->redirects = $this->getRedirects();

		$this->redirect();
	}

	public function redirect() {
		if( $this->hasRedirect() ) {
			header::redirect( $this->redirectTo() );
		}
	}

	public function redirectTo() {
		return u() . '/' . $this->redirects[$this->uri];
	}

	public function getRedirects() {
		return c::get('plugin.redirect301', []);
	}

	public function hasRedirect() {
		if( array_key_exists ( $this->uri, $this->redirects ) ) {
			return true;
		}
	}

	public function url() {
		return strtok( url::current(), '?' );
	}

	public function getUri() {
		return str_replace( u() . '/', '', $this->url() );
	}
}

new redirect301();