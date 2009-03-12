dnl
dnl $ Id: $
dnl

PHP_ARG_ENABLE(SlightPHP, whether to enable SlightPHP functions,
[  --enable-SlightPHP         Enable SlightPHP support])

if test "$PHP_SLIGHTPHP" != "no"; then
  export OLD_CPPFLAGS="$CPPFLAGS"
  export CPPFLAGS="$CPPFLAGS $INCLUDES -DHAVE_SLIGHTPHP"

  AC_MSG_CHECKING(PHP version)
  AC_TRY_COMPILE([#include <php_version.h>], [
#if PHP_VERSION_ID < 50100
#error  this extension requires at least PHP version 5.1.0rc1
#endif
],
[AC_MSG_RESULT(ok)],
[AC_MSG_ERROR([need at least PHP 5.1.0rc1])])

  export CPPFLAGS="$OLD_CPPFLAGS"


  PHP_SUBST(SLIGHTPHP_SHARED_LIBADD)
  AC_DEFINE(HAVE_SLIGHTPHP, 1, [ ])

  PHP_NEW_EXTENSION(SlightPHP, SlightPHP.c , $ext_shared)

fi
