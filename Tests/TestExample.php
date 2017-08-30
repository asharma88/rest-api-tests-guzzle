<?php

class TestExample extends Tests\TestBase {

  public function testBasicGet() {
      $expected_body = "quiaetsuscipitsuscipitrecusandaeconsequunturexpeditae"
                      ."tcumreprehenderitmolestiaeututquastotamnostrumrerumes"
                      ."tautemsuntremevenietarchitecto";

      // url request -> get
      $url = sprintf('https://%s/posts/1', self::$api_host);
      $response = self::$client->request('GET', $url, ['http_errors' => false]);
      // check http status code
      $this->assertEquals(200, $response->getStatusCode());
      // decode json object returned from request
      $body = json_decode($response->getBody(), true);
      // make assertions to verify response
      $this->assertEquals(1, $body['userId']);
      $this->assertEquals(1, $body['id']);
      $this->assertEquals(
        "sunt aut facere repellat provident occaecati "
        ."excepturi optio reprehenderit",
        $body['title']
      );

      $actual_body = preg_replace('/\s+/', '', $body['body']);
      $this->assertEquals($expected_body, $actual_body);
  }

}


?>
