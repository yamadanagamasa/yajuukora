import cv2
import os
from PIL import Image, ImageDraw, ImageFilter
def face_cascade(img_path, save_cascade_image_dir, name):
    # 画像を読み込む
    imgback = cv2.imread(img_path)

    # カスケード分類器を生成 -> 今回はアニメ画像の正面の顔を検出
    cascade = cv2.CascadeClassifier('lbpcascade_animeface.xml')

    # 保存先ディレクトリ作成
    os.makedirs(save_cascade_image_dir, exist_ok=True)
    # 顔を検出する
    facerect1 = cascade.detectMultiScale(imgback)
    im1 = Image.open(img_path)
    for i in facerect1:
        x = i[0]
        y = i[1]
        w = i[2]
        h = i[3]
        imgmain = cv2.imread('595625FC-3F07-4420-BE5B-1C368F69FE6E.jpeg')
        img2 = cv2.resize(imgmain ,(int(w),int(h)))
        new_image = img2.copy()
        if new_image.ndim == 2:  # モノクロ
            pass
        elif new_image.shape[2] == 3:  # カラー
            new_image = cv2.cvtColor(new_image, cv2.COLOR_BGR2RGB)
        elif new_image.shape[2] == 4:  # 透過
            new_image = cv2.cvtColor(new_image, cv2.COLOR_BGRA2RGBA)
        new_image = Image.fromarray(new_image)
        back_im = im1.copy()
        back_im.paste(new_image, (x,y))
    back_im.save('{}/cascade_image_{}.jpg'.format(save_cascade_image_dir, name), quality=95)

ORIGINAL_IMG_PATH = "images" # 参照元ディレクトリ
SAVE_CASCADE_FOLDER = 'outputimages' # 保存先のディレクトリ

img_li = os.listdir(ORIGINAL_IMG_PATH)

for img in img_li:
    try:
        face_cascade("{}/{}".format(ORIGINAL_IMG_PATH, img), SAVE_CASCADE_FOLDER, str(img))
        print("ok")
    except:
        print("erorr")
  
