import os
import filecmp

generated_code_path = "/Users/ibansal/di/github/twilio/twilio-php/reflectionCode"
original_code_path = "/Users/ibansal/di/github/twilio-php/reflectionCode"

def find(name, path):
    for root, dirs, files in os.walk(path):
        if name in files:
            return os.path.join(root, name)


files_array = []
for path, subdirs, files in os.walk(generated_code_path):
    for name in files:
        if(".php" not in name):
            # print(name)
            original_file = find(name,original_code_path)
            files_array.append(name)
            command = f'sort {original_file} -o {original_file}'
            os.system(command)
            command = f'sort {os.path.join(path,name)} -o {os.path.join(path,name)}'
            os.system(command)
            # print(original_file)
            # file_1 = open(original_file, "r")
            # file_2 = open(os.path.join(path,name), "r")
            #
            # file_1_line = file_1.readline()
            # file_2_line = file_2.readline()
            #
            # # Use as a COunter
            # line_no = 1
            #
            # print()
            # while file_1_line != '' or file_2_line != '':
            #
            #     # Removing whitespaces
            #     file_1_line = file_1_line.rstrip()
            #     file_2_line = file_2_line.rstrip()
            #
            #     # Compare the lines from both file
            #     if file_1_line != file_2_line:
            #
            #         # otherwise output the line on file1 and use @ sign
            #         if file_1_line == '':
            #             print(original_file, "Line-%d" % line_no, file_1_line)
            #         else:
            #             print(original_file, "Line-%d" % line_no, file_1_line)
            #
            #         # otherwise output the line on file2 and use # sign
            #         if file_2_line == '':
            #             print(name, "Line-%d" % line_no, file_2_line)
            #         else:
            #             print(name, "Line-%d" % line_no, file_2_line)
            #
            #         # Print a empty line
            #         print()
            #
            #     # Read the next line from the file
            #     file_1_line = file_1.readline()
            #     file_2_line = file_2.readline()
            #
            #     line_no += 1
            # file_1.close()
            # file_2.close()

            # result = filecmp.cmp(original_file, os.path.join(path, name), shallow=False)
            # print(result)
match, mismatch, errors = filecmp.cmpfiles(original_code_path, generated_code_path, files_array, shallow=False)
print("Match:", match)
print("Mismatch:", mismatch)
print("Errors:", errors)
