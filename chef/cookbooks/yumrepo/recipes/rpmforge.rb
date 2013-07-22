#
# Cookbook Name:: yumrepo
# Recipe:: rpmforge
#
# Copyright 2012, Panagiotis Papadomitsos
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#

yum_key node['repo']['rpmforge']['key'] do
  url  node['repo']['rpmforge']['key_url']
  action :add
end

yum_repository "rpmforge" do
  description "RHEL $releasever - RPMforge.net - dag"
  key node['repo']['rpmforge']['key']
  url node['repo']['rpmforge']['url']
  mirrorlist true
  action :add
end
