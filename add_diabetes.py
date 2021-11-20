import sys
import traceback
import logging
import python_db
from random import randint

mysql_username = 'scanales' # please change to your username
mysql_password= 'iepha3Oo'  # please change to your MySQL password

try:
    python_db.open_database('localhost', mysql_username, mysql_password, mysql_username)
    FNAME = sys.argv[1]
    LNAME = sys.argv[2]

    if sys.argv[3] == '1':
        SEX = 'm'
    elif sys.argv[3] == '2':
        SEX = 'f'
    else:
        SEX = 'o'

    AGE = sys.argv[4]
    ID = randint(10000, 999999)

    val = "'" + FNAME + "','" + LNAME + "','" + SEX + "'," + str(AGE) + "," + str(ID)
    python_db.insert("Patient", val)

    python_db.close()
except Exception as e:
    logging.error(traceback.format_exc())