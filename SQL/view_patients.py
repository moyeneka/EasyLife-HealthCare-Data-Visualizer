# import sys
# import traceback
# import logging
# import python_db

# mysql_username = 'scanales'
# mysql_password = 'iepha3Oo'

# try:
#     python_db.open_database('localhost', mysql_username, mysql_password, mysql_username)
#     res = python_db.executeSelect('SELECT * FROM Patient;')
#     res = res.split('\n')
#     col_names = res[0].split(' ')
#     print("<br/>" + "Patient Table" + "<br/>")
#     print("<table>")
#     print(" <tr>")
#     print("   <th>" + col_names[0] + "</th>"
#         + "   <th>" + col_names[1] + "</th>"
#         + "   <th>" + col_names[2] + "</th>"
#         + "   <th>" + col_names[3] + "</th>"
#         + "   <th>" + col_names[3] + "</th>")
#     print("</tr>")

#     for i in range(len(res)-2):
#         col_data = res[i+2].split(' ')
#         print(" <tr>")
#         print("   <td>" + col_data + "</td>"
#             + "   <td>" + col_data + "</td>"
#             + "   <td>" + col_data + "</td>"
#             + "   <td>" + col_data + "</td>"
#             + "   <td>" + col_data + "</td>")
#         print("</tr>")

#     print("</table>")
#     python_db.close()
# except Exception as e:
#     logging.error(traceback.format_exc())

import sys
import traceback
import logging
import python_db


mysql_username = 'scanales' # please change to your username
mysql_password= 'iepha3Oo'  # please change to your MySQL password

try:
    python_db.open_database('localhost',mysql_username,mysql_password,mysql_username) # open database
    res =python_db.executeSelect('SELECT * FROM GAME;')
    res=res.split('\n')# split the header and data for printing
    print("<br/>"+ "GAME Table"+"<br/>" + res[0]+ "<br/>"+res[1]+ "<br/>")
    for i in range(len(res)-2):
        print(res[i+2]+"<br/>")
    python_db.close() # close db    
except Exception as e:
        logging.error(traceback.format_exc())
