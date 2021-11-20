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
    CP = sys.argv[2]
    RESTINGBP = sys.argv[3]
    CHOL = sys.argv[4]
    FBS = sys.argv[5]
    RESTECG = sys.argv[6]
    THALACH = sys.argv[7]
    EXANG = sys.argv[8]
    OLDPEAK = sys.argv[9]
    SLOPE = sys.argv[10]
    CA = sys.argv[10]
    THAL = sys.argv[11]
    TGT = sys.argv[12]

    val = str(ID) + "," + str(CP) + "," + str(RESTINGBP) + "," + str(CHOL) + "," + str(FBS) + "," + str(RESTECG) + "," + str(THALACH) + "," + str(EXANG) + "," + str(OLDPEAK) + "," + str(SLOPE) + "," + str(CA) + "," + str(THAL) + "," + str(TGT)
    python_db.insert("Heart", val)

    python_db.close()
except Exception as e:
    logging.error(traceback.format_exc())