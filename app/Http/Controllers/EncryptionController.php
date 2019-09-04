<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShiftEncryptor;

class EncryptionController extends Controller
{
  public function shiftEncrypt(Request $request)
  {
    $unencryted_string = $request->input('string');
    $encryptor = new ShiftEncryptor ();
    $encrypted_string = $encryptor->encrypt($unencryted_string);
    return response()->json(['success'=> $encrypted_string]);
  }

  public function shiftDecrypt(Request $request)
  {
    $encryted_string = $request->input('string');
    $encryptor = new ShiftEncryptor ();
    $decrypted_string = $encryptor->decrypt($encryted_string);
    return response()->json(['success'=> $decrypted_string]);
  }
}
