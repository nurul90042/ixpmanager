
########################################################################################
########################################################################################
#
# Community filtering definitions for use with looking glasses
#
# Current implementation based on:
#
# https://github.com/euro-ix/rs-workshop-july-2017/wiki/Route-Server-BGP-Community-usage
#
########################################################################################
########################################################################################



# These will all be filtered and not piped to the master table:

define IXP_LC_FILTERED_PREFIX_LEN_TOO_LONG      = ( routeserverasn, 1101, 1  );
define IXP_LC_FILTERED_PREFIX_LEN_TOO_SHORT     = ( routeserverasn, 1101, 2  );
define IXP_LC_FILTERED_BOGON                    = ( routeserverasn, 1101, 3  );
define IXP_LC_FILTERED_BOGON_ASN                = ( routeserverasn, 1101, 4  );
define IXP_LC_FILTERED_AS_PATH_TOO_LONG         = ( routeserverasn, 1101, 5  );
define IXP_LC_FILTERED_AS_PATH_TOO_SHORT        = ( routeserverasn, 1101, 6  );
define IXP_LC_FILTERED_FIRST_AS_NOT_PEER_AS     = ( routeserverasn, 1101, 7  );
define IXP_LC_FILTERED_NEXT_HOP_NOT_PEER_IP     = ( routeserverasn, 1101, 8  );
define IXP_LC_FILTERED_IRRDB_PREFIX_FILTERED    = ( routeserverasn, 1101, 9  );
define IXP_LC_FILTERED_IRRDB_ORIGIN_AS_FILTERED = ( routeserverasn, 1101, 10 );
define IXP_LC_FILTERED_PREFIX_NOT_IN_ORIGIN_AS  = ( routeserverasn, 1101, 11 );

define IXP_LC_FILTERED_RPKI_UNKNOWN             = ( routeserverasn, 1101, 12 );
define IXP_LC_FILTERED_RPKI_INVALID             = ( routeserverasn, 1101, 13 );
define IXP_LC_FILTERED_TRANSIT_FREE_ASN         = ( routeserverasn, 1101, 14 );
define IXP_LC_FILTERED_TOO_MANY_COMMUNITIES     = ( routeserverasn, 1101, 15 );




# Informational prefixes

define IXP_LC_INFO_RPKI_VALID       = ( routeserverasn, 1000, 1  );
define IXP_LC_INFO_RPKI_UNKNOWN     = ( routeserverasn, 1000, 2  );
define IXP_LC_INFO_RPKI_NOT_CHECKED = ( routeserverasn, 1000, 3  );

define IXP_LC_INFO_IRRDB_VALID         = ( routeserverasn, 1001, 1  );
define IXP_LC_INFO_IRRDB_NOT_CHECKED   = ( routeserverasn, 1001, 2  );
define IXP_LC_INFO_IRRDB_MORE_SPECIFIC = ( routeserverasn, 1001, 3  );

define IXP_LC_INFO_IRRDB_FILTERED_LOOSE  = ( routeserverasn, 1001, 1000 );
define IXP_LC_INFO_IRRDB_FILTERED_STRICT = ( routeserverasn, 1001, 1001 );
define IXP_LC_INFO_IRRDB_PREFIX_EMPTY    = ( routeserverasn, 1001, 1002 );

define IXP_LC_INFO_SAME_AS_NEXT_HOP = ( routeserverasn, 1001, 1200 );

# ( routeserverasn, 1010, peerasn ) -> route learnt from peerasn via routeserverasn
# ( routeserverasn, 1011, originasn ) -> route origin asn via routeserverasn


# And the filter for examining routes in the peers import table being exported
# to the master table

filter f_export_to_master
{


    accept;
}




