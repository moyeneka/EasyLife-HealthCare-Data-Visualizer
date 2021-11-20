import sys
import traceback
import logging
import python_db
from random import randint

mysql_username = 'scanales' # please change to your username
mysql_password= 'iepha3Oo'  # please change to your MySQL password

try:
    python_db.open_database('localhost', mysql_username, mysql_password, mysql_username)
    ID = sys.argv[1]
    PREGNANCIES = sys.argv[2]
    GLUCOSE = sys.argv[3]
    BLOODP = sys.argv[4]
    SKINTH = sys.argv[5]
    INSULIN = sys.argv[6]
    BMI = sys.argv[7]
    DPF = sys.argv[8]
    OUTCOME = sys.argv[9]

    val = str(ID) + "," + str(PREGNANCIES) + "," + str(GLUCOSE) + "," + str(BLOODP) + "," + str(SKINTH) + "," + str(INSULIN) + "," + str(BMI) + "," + str(DPF) + "," + str(OUTCOME)
    python_db.insert("Patient", val)

    python_db.close()
except Exception as e:
    logging.error(traceback.format_exc())