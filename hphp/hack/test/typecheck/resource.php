<?hh // strict
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

function f1(): ?resource {
  // UNSAFE
  return fopen('/dev/null', 'r');
}

function f2(resource $x): void {
}

function f3(): void {
  $x = f1();
  if (is_resource($x)) {
    f2($x);
  }
}
