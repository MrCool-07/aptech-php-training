<?php
interface MyPackageThrowable extends Throwable {}

class MyPackageException extends Exception implements MyPackageThrowable {}

throw new MyPackageException();