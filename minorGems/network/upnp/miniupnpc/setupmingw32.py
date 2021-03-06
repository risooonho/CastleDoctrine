#! /usr/bin/python
# $Id: setupmingw32.py,v 1.1 2010/03/24 15:47:38 jcr13 Exp $
# the MiniUPnP Project (c) 2007-2009 Thomas Bernard
# http://miniupnp.tuxfamily.org/ or http://miniupnp.free.fr/
#
# python script to build the miniupnpc module under unix
#
from distutils.core import setup, Extension
setup(name="miniupnpc", version="1.4",
      ext_modules=[
	         Extension(name="miniupnpc", sources=["miniupnpcmodule.c"],
	                   libraries=["ws2_32"],
			           extra_objects=["libminiupnpc.a"])
			 ])

