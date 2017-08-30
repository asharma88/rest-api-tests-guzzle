<?php

class TestExample extends Tests\TestBase {

  public function testBasicGet() {
      $url = sprintf('https://%s/posts/1', self::$api_host);
      $response = self::$client->request('GET', $url, ['http_errors' => false]);
      $this->assertEquals(200, $response->getStatusCode());
  }

}


?>
