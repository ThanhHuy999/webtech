# sử dụng opencv để nhận dạng cà chua chín và xác định tọa độ cà chua chín
# sử dụng thư viện numpy để xử lý mảng
# sử dụng thư viện math để tính toán
# sử dụng thư viện time để đo thời gian
# sử dụng thư viện os để lưu file
# sử dụng thư viện sys để lấy tham số đầu vào

import cv2
import numpy as np
import math
import time
import os
import sys

# hàm tính khoảng cách giữa 2 điểm
def distance(p1, p2):
    return math.sqrt((p1[0]-p2[0])**2 + (p1[1]-p2[1])**2)

# hàm tính góc giữa 3 điểm
def angle(p1, p2, p3):
    return math.degrees(math.atan2(p3[1]-p2[1], p3[0]-p2[0]) - math.atan2(p1[1]-p2[1], p1[0]-p2[0]))

# hàm tính diện tích tam giác
def area(p1, p2, p3):
    return abs((p1[0]*(p2[1]-p3[1]) + p2[0]*(p3[1]-p1[1]) + p3[0]*(p1[1]-p2[1]))/2.0)

# hàm kiểm tra xem 3 điểm có thẳng hàng hay không
def isStraight(p1, p2, p3):
    return area(p1, p2, p3) == 0

# hàm kiểm tra xem 3 điểm có tạo thành góc vuông hay không
def isRightAngle(p1, p2, p3):
    return angle(p1, p2, p3) == 90

# hàm kiểm tra xem 3 điểm có tạo thành góc nhọn hay không
def isAcuteAngle(p1, p2, p3):
    return angle(p1, p2, p3) < 90

