<?php

it('redirects to tasks page', function () {

    $response = $this->get('/');

    $response->assertRedirect('/tasks');
});