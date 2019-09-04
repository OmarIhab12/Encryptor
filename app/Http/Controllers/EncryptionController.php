<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShiftEncryptor;
use App\MatrixEncryptor;

class EncryptionController extends Controller
{
  public function shiftEncrypt(Request $request)
  {
    $unencryted_string = $request->input('string');
    $encryptor = new ShiftEncryptor();
    $encrypted_string = $encryptor->encrypt($unencryted_string);
    return response()->json(['success'=> true, 'string' => $encrypted_string]);
  }

  public function shiftDecrypt(Request $request)
  {
    $encryted_string = $request->input('string');
    $encryptor = new ShiftEncryptor();
    $decrypted_string = $encryptor->decrypt($encryted_string);
    return response()->json(['success'=> true, 'string' => $decrypted_string]);
  }

  public function matrixEncrypt(Request $request)
  {
    $unencryted_string = $request->input('string');
    $encryptor = new MatrixEncryptor();
    $encrypted_string = $encryptor->encrypt($unencryted_string);
    return response()->json(['success'=> true, 'string' => $encrypted_string]);
  }

  public function matrixDecrypt(Request $request)
  {
    $encryted_string = $request->input('string');
    $encryptor = new MatrixEncryptor();
    try {
      $decrypted_string = $encryptor->decrypt($encryted_string);
    } catch (\Exception $e) {
      abort(422, 'This string does not match the requirements. Please, use the /matrixEncrypt api to correctly get the encrupted string');
    }

    return response()->json(['success'=> true, 'string' => $decrypted_string]);
  }
}
