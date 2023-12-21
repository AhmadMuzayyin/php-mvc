<?php
function csrf_token()
{
  return bin2hex(random_bytes(32)); // generate token
}
